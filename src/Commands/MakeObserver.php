<?php

namespace Halfpetal\Laravel\ArtisanCommands\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Filesystem\Filesystem;
use ReflectionClass;
use Symfony\Component\Console\Input\InputArgument;

class MakeObserver extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:observer
                            {name : The name of the class. }
                            {model : The model for which the observer will be used. }
                            {namespace? : The application namespace, if not set App will be used. }';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Eloquent model observer';
 
    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Model observer';
 
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/DummyObserver.php.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Observers';
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);

        if($this->argument('namespace')) {
            $stub = str_replace('App', $this->argument('namespace'), $stub);
        }

        return str_replace('DummyModel', $this->argument('model'), $stub);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the class.'],
            ['model', InputArgument::REQUIRED, 'The model for which the observer will be used.'],
        ];
    }
}