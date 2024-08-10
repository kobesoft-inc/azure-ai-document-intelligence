<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Supports;

class ArrayMapper
{
    /**
     * 配列からインスタンスを生成する
     *
     * @param mixed $array 配列
     * @param string $className クラス名
     * @return mixed インスタンス
     * @throws \ReflectionException
     */
    public static function map(mixed $array, string $className): mixed
    {
        $instance = new $className();
        $reflection = new \ReflectionClass($className);
        foreach ($reflection->getProperties() as $property) {
            $propertyName = $property->getName();
            if (array_key_exists($propertyName, $array)) {
                $property->setValue($instance, self::convertValue($array[$propertyName], self::propertyType($property)));
            }
        }
        return $instance;
    }

    /**
     * 値からプロパティの型に変換する
     *
     * @param mixed $value 値
     * @param string $propertyType プロパティの型
     * @return mixed 変換後の値
     * @throws \ReflectionException
     */
    private static function convertValue(mixed $value, string $propertyType): mixed
    {
        if ($propertyType === 'mixed') {
            // プロパティがmixed型の場合
            return $value;
        } elseif (is_scalar($value)) {
            // 値もプロパティもスカラー型の場合
            if (in_array($propertyType, ['int', 'float', 'string', 'bool'])) {
                return $value;
            }
        } elseif (is_array($value)) {
            if (str_starts_with($propertyType, 'array')) {
                // プロパティが配列型の場合
                $elementType = self::arrayElementType($propertyType);
                return array_map(fn($v) => self::convertValue($v, $elementType), $value);
            } elseif (class_exists($propertyType)) {
                // プロパティがクラス型の場合
                return self::map($value, $propertyType);
            }
        }
        throw new \InvalidArgumentException("Invalid type: $propertyType");
    }

    /**
     * プロパティの型を取得する
     *
     * @param \ReflectionProperty $property プロパティ
     * @return string プロパティの型
     */
    private static function propertyType(\ReflectionProperty $property): string
    {
        $docComment = $property->getDocComment();
        if ($docComment) {
            if (preg_match('/@var\s+(\S+)/', $docComment, $matches)) {
                return current(array_filter(explode('|', $matches[1]), fn($type) => $type !== 'null'));
            }
        }
        return $property->getType()?->getName() ?? 'mixed';
    }

    /**
     * 配列型の要素型を取得する
     *
     * @param string $propertyType
     * @return string
     */
    private static function arrayElementType(string $propertyType): string
    {
        return preg_match('/<([^>]+)>$/', $propertyType, $matches) ? $matches[1] : 'mixed';
    }
}