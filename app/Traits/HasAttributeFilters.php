<?php

namespace App\Traits;
use App\Enums\AttributeTypeEnum;
use Spatie\QueryBuilder\AllowedFilter;
use App\Models\ProjectAttribute;

/*
 * handle dynamic filtration for EAV modeling
 * */
trait HasAttributeFilters
{
    protected function getAttributeFilters(): array
    {
        return ProjectAttribute::get()->map(function ($attribute) {
            return AllowedFilter::callback("{$attribute->name}",
                function ($query, $value) use ($attribute) {
                    $this->applyAttributeFilter($query, $attribute, $value);
                });
        })->toArray();
    }

    protected function applyAttributeFilter($query, $attribute, $value): void
    {
        $query->whereHas('attributeValues', function ($query) use ($attribute, $value) {
            $query->where('attribute_id', $attribute->id);

            $this->applyAttributeTypeFilter($query, $attribute->type, $value);
        });
    }

    protected function applyAttributeTypeFilter($query, string $type, $value): void
    {
        switch ($type) {
            case AttributeTypeEnum::DATE->value:
                $this->applyDateFilter($query, $value);
                break;

            case AttributeTypeEnum::TIME->value:
                $this->applyTimeFilter($query, $value);
                break;

            case AttributeTypeEnum::NUMBER->value:
                $this->applyNumberFilter($query, $value);
                break;

            case AttributeTypeEnum::TEXT->value:
            default:
                $this->applyTextFilter($query, $value);
                break;
        }
    }

    protected function applyDateFilter($query, $value): void
    {
        if (is_array($value)) {
            if (isset($value['from'])) $query->whereDate('value', '>=', $value['from']);
            if (isset($value['to'])) $query->whereDate('value', '<=', $value['to']);
        } else {
            $query->where('value', $value);
        }
    }

    protected function applyTimeFilter($query, $value): void
    {
        if (is_array($value)) {
            if (isset($value['min'])) {
                $query->where('value', '>', $this->formatTime($value['min']));
            } elseif (isset($value['max'])) {
                $query->where('value', '<', $this->formatTime($value['max']));
            }
        } else {
            $query->where('value', $this->formatTime($value));
        }
    }

    protected function applyNumberFilter($query, $value): void
    {
        if (is_array($value)) {
            if (isset($value['min'])) $query->where('value', '>=', $value['min']);
            if (isset($value['max'])) $query->where('value', '<=', $value['max']);
        } else {
            $query->where('value', $value);
        }
    }

    protected function applyTextFilter($query, $value): void
    {
        $query->where('value', 'like', "%{$value}%");
    }

    protected function formatTime($timeString): string
    {
        try {
            return date('H:i:s', strtotime($timeString));
        } catch (\Exception $e) {
            return $timeString;
        }
    }
}
