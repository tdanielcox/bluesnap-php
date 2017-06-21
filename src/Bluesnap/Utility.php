<?php

namespace tdanielcox\Bluesnap;

class Utility
{
    public static function objectToArray($object)
    {
        return json_decode(json_encode($object), true);
    }

    public static function parseBluesnapErrors($errors)
    {
        $errors = json_decode($errors);
        $response = '';

        if ($errors)
        {
            if (is_array($errors->message))
            {
                $error = end($errors->message);
                $response = trim($error->description);
            }
        }

        return $response;
    }

    public static function getOption($options, $option, $default = null)
    {
        if (array_key_exists($option, $options))
        {
            return $options[$option];
        }

        return $default;
    }

    public static function getModelEndpoint($model, $model_id = null)
    {
        $models = [
            'CardTransaction' => 'transactions',
            'Report' => 'report',
            'Refund' => 'transactions/'. $model_id .'/refund',
            'Plan' => 'recurring/plans',
            'Subscription' => 'recurring/subscriptions',
            'SubscriptionCharge' => 'recurring/subscriptions/charges',
            'VaultedShopper' => 'vaulted-shoppers',
            'Vendor' => 'vendors',
        ];

        return $models[$model];
    }

    public static function setupModel($model, $data, $is_collection = false, $target_parameter = null)
    {
        $data = self::objectToArray($data);
        $class_path = '\tdanielcox\Bluesnap\Models\\'. $model;

        if ($is_collection)
        {
            $target = $target_parameter ? $data[$target_parameter] : $data;
            $models = array_map(function($m) use ($class_path)
            {
                return new $class_path($m);
            }, $target);

            return $models;
        }

        return new $class_path($data);
    }
}