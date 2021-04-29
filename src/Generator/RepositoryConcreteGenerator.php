<?php

namespace Akcauser\Cruder\Generator;

use Akcauser\Cruder\Utils\FileUtil;
use Illuminate\Support\Str;

class RepositoryConcreteGenerator
{
    private $modelName;
    private $template;
    private $folderPath;

    public function __construct($modelName)
    {
        $this->modelName = $modelName;
        $this->folderPath = config('cruder.repositories_path.concrete');

        $this->generate();
    }

    protected function generate()
    {
        $this->getTemplate();
        $this->replaceVariables();
        $this->store();
    }

    protected function getTemplate()
    {
        $this->template = file_get_contents(__DIR__ . '/../templates/repository/repository_concrete.stub');
    }

    protected function replaceVariables()
    {
        $this->template = str_replace('%MODEL_NAME%', $this->modelName, $this->template);
        $this->template = str_replace('%MODEL_NAME_CAMEL_CASE%', Str::camel($this->modelName), $this->template);
    }

    protected function store()
    {
        $fileName = $this->modelName . 'Repository.php';

        FileUtil::newFile($this->folderPath, $fileName, $this->template);
    }
}
