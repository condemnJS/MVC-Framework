<?php


namespace core\form;

use core\Model;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;
    public Model $model;
    public string $attr;

    public function __construct(Model $model, string $attr)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attr = $attr;
    }

    public function __toString()
    {
        return sprintf('
            <div class="mb-3">
                <label class="form-label">%s</label>
                <input type="%s" name="%s" value="%s" class="form-control%s">
                <div class="invalid-feedback">
                    %s
                </div>
            </div>
        ',
            $this->model->labels()[$this->attr] ?? $this->attr,
            $this->type,
            $this->attr,
            $this->model->{$this->attr},
            $this->model->hasError($this->attr) ? ' is-invalid' : '',
            $this->model->getFirstError($this->attr)
        );
    }

    public function passwordField(): object
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}
