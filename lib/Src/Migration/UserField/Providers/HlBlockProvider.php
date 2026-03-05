<?php

namespace Base\Module\Src\Migration\UserField\Providers;

class HlBlockProvider extends UserFieldProvider
{
    public const DISPLAY_TYPE_LIST = 'LIST';
    public const DISPLAY_TYPE_CHECKBOX = 'CHECKBOX';

    public static function getType(): string
    {
        return 'hlblock';
    }

    public function setHlBlockId(int $hlblockId): self
    {
        $this->settings['HLBLOCK_ID'] = $hlblockId;
        return $this;
    }

    public function setHlFieldId(int $hlFieldId): self
    {
        $this->settings['HLFIELD_ID'] = $hlFieldId;
        return $this;
    }
    public function setDefaultValue(int $valueId): self
    {
        $this->settings['DEFAULT_VALUE'] = $valueId;
        return $this;
    }

    public function setDisplayType(string $type): self
    {
        $allowedDisplays = [self::DISPLAY_TYPE_LIST, self::DISPLAY_TYPE_CHECKBOX];
        $this->settings['DISPLAY'] = in_array($type, $allowedDisplays) ? $type : self::DISPLAY_TYPE_LIST;
        return $this;
    }

    public function setListHeight(int $height): self
    {
        $this->settings['LIST_HEIGHT'] = $height;
        return $this;
    }
}
