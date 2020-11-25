<?php

namespace Illuminate\Database\Console\Factories;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class FactoryMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:factory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new model factory';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Factory';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->resolveStubPath('/stubs/factory.stub');
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.$stub;
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $factory = class_basename(Str::ucfirst(str_replace('Factory', '', $name)));

        $namespaceModel = $this->option('model')
                        ? $this->qualifyModel($this->option('model'))
                        : $this->qualifyModel($this->guessModelName($name));

        $model = class_basename($namespaceModel);

<<<<<<< HEAD
        if (Str::startsWith($namespaceModel, $this->rootNamespace().'Models')) {
            $namespace = Str::beforeLast('Database\\Factories\\'.Str::after($namespaceModel, $this->rootNamespace().'Models\\'), '\\');
=======
        if (Str::startsWith($namespaceModel, 'App\\Models')) {
            $namespace = Str::beforeLast('Database\\Factories\\'.Str::after($namespaceModel, 'App\\Models\\'), '\\');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        } else {
            $namespace = 'Database\\Factories';
        }

        $replace = [
            '{{ factoryNamespace }}' => $namespace,
            'NamespacedDummyModel' => $namespaceModel,
            '{{ namespacedModel }}' => $namespaceModel,
            '{{namespacedModel}}' => $namespaceModel,
            'DummyModel' => $model,
            '{{ model }}' => $model,
            '{{model}}' => $model,
            '{{ factory }}' => $factory,
            '{{factory}}' => $factory,
        ];

        return str_replace(
            array_keys($replace), array_values($replace), parent::buildClass($name)
        );
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
<<<<<<< HEAD
        $name = (string) Str::of($name)->replaceFirst($this->rootNamespace(), '')->finish('Factory');
=======
        $name = (string) Str::of($name)->replaceFirst('App\\', '')->finish('Factory');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

        return $this->laravel->databasePath().'/factories/'.str_replace('\\', '/', $name).'.php';
    }

    /**
     * Guess the model name from the Factory name or return a default model name.
     *
     * @param  string  $name
     * @return string
     */
    protected function guessModelName($name)
    {
        if (Str::endsWith($name, 'Factory')) {
            $name = substr($name, 0, -7);
        }

<<<<<<< HEAD
        $modelName = $this->qualifyModel(Str::after($name, $this->rootNamespace()));
=======
        $modelName = $this->qualifyModel(Str::after($name, 'App\\'));
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

        if (class_exists($modelName)) {
            return $modelName;
        }

        if (is_dir(app_path('Models/'))) {
<<<<<<< HEAD
            return $this->rootNamespace().'Models\Model';
        }

        return $this->rootNamespace().'Model';
=======
            return 'App\Models\Model';
        }

        return 'App\Model';
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['model', 'm', InputOption::VALUE_OPTIONAL, 'The name of the model'],
        ];
    }
}
