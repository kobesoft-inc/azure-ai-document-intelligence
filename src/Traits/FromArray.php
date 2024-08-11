<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Traits;

/**
 * 配列からインスタンスを生成するトレイト
 */
trait FromArray
{
    /**
     * 配列からインスタンスを生成する
     *
     * @param array $array 配列
     * @return static インスタンス
     */
    public static function fromArray(array $array): static
    {
        $instance = new static();
        $reflection = new \ReflectionClass(static::class);
        foreach ($reflection->getProperties() as $property) {
            $propertyName = $property->getName();
            if (array_key_exists($propertyName, $array)) {
                $property->setValue(
                    $instance,
                    self::convertToPropertyValue($array[$propertyName], $property->getType()->getName(), $property)
                );
            }
        }
        return $instance;
    }

    /**
     * 値からプロパティの型に変換する
     *
     * @param mixed $value 値
     * @param string $type プロパティの型
     * @param \ReflectionProperty|null $property プロパティ
     * @return mixed 変換後の値
     */
    private static function convertToPropertyValue(mixed $value, string $type, ?\ReflectionProperty $property): mixed
    {
        if ($type === 'mixed') {
            // プロパティがmixed型の場合、そのまま返す
            return $value;
        } else if ($type === 'int') {
            // プロパティが整数型の場合、整数に変換して返す
            if (is_int($value)) {
                return $value;
            }
        } else if ($type === 'float') {
            // プロパティが浮動小数点数型の場合、浮動小数点数に変換して返す
            if (is_numeric($value)) {
                return floatval($value);
            }
        } else if ($type === 'string') {
            // プロパティが文字列型の場合、文字列に変換して返す
            if (is_string($value)) {
                return $value;
            }
        } else if ($type === 'bool') {
            // プロパティが真偽値型の場合、真偽値に変換して返す
            if (is_string($value)) {
                $lowerValue = strtolower($value);
                if ($lowerValue === 'true') {
                    return true;
                } else if ($lowerValue === 'false') {
                    return false;
                }
            } else if (is_bool($value)) {
                return $value;
            }
        } else if ($type === 'array') {
            // プロパティが配列型の場合、各要素の型を調べて変換して返す
            if (is_array($value)) {
                if ($property !== null && preg_match('/@var\s+array<([^>]+)>/', $property->getDocComment(), $matches)) {
                    // プロパティの型が配列の場合、要素の型を取得する
                    $elementType = $matches[1];
                    if (preg_match('/^[A-Z]/', $elementType)) { // クラス名の場合
                        $namespace = $property->getDeclaringClass()->getNamespaceName();
                        $elementType = $namespace . '\\' . $elementType;
                    }
                } else {
                    $elementType = 'mixed';
                }
                // 配列の各要素を変換して返す
                $array = [];
                foreach ($value as $k => $v) {
                    $array[$k] = self::convertToPropertyValue($v, $elementType, null);
                }
                return $array;
            }
        } else if (class_exists($type)) {
            // プロパティがクラス型の場合、クラスのfromArrayメソッドを使って変換して返す
            if (is_array($value)) {
                return $type::fromArray($value);
            }
        }

        // 変換できないので例外を投げる
        throw new \InvalidArgumentException("Invalid type: $type");
    }
}