<?php

namespace Illuminate\Database\Schema;

use Exception;
use Illuminate\Database\Connection;
use Illuminate\Support\Str;
use Symfony\Component\Process\Process;

class MySqlSchemaState extends SchemaState
{
    /**
     * Dump the database's schema into a file.
     *
     * @param  \Illuminate\Database\Connection  $connection
     * @param  string  $path
     * @return void
     */
    public function dump(Connection $connection, $path)
    {
        $this->executeDumpProcess($this->makeProcess(
            $this->baseDumpCommand().' --routines --result-file="${:LARAVEL_LOAD_PATH}" --no-data'
        ), $this->output, array_merge($this->baseVariables($this->connection->getConfig()), [
            'LARAVEL_LOAD_PATH' => $path,
        ]));

        $this->removeAutoIncrementingState($path);

        $this->appendMigrationData($path);
    }

    /**
     * Remove the auto-incrementing state from the given schema dump.
     *
     * @param  string  $path
     * @return void
     */
    protected function removeAutoIncrementingState(string $path)
    {
        $this->files->put($path, preg_replace(
            '/\s+AUTO_INCREMENT=[0-9]+/iu',
            '',
            $this->files->get($path)
        ));
    }

    /**
     * Append the migration data to the schema dump.
     *
     * @param  string  $path
     * @return void
     */
    protected function appendMigrationData(string $path)
    {
        $process = $this->executeDumpProcess($this->makeProcess(
<<<<<<< HEAD
            $this->baseDumpCommand().' '.$this->migrationTable.' --no-create-info --skip-extended-insert --skip-routines --compact'
=======
            $this->baseDumpCommand().' migrations --no-create-info --skip-extended-insert --skip-routines --compact'
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        ), null, array_merge($this->baseVariables($this->connection->getConfig()), [
            //
        ]));

        $this->files->append($path, $process->getOutput());
    }

    /**
     * Load the given schema file into the database.
     *
     * @param  string  $path
     * @return void
     */
    public function load($path)
    {
<<<<<<< HEAD
        $command = 'mysql '.$this->connectionString().' --database="${:LARAVEL_LOAD_DATABASE}" < "${:LARAVEL_LOAD_PATH}"';

        $this->makeProcess($command)->mustRun(null, array_merge($this->baseVariables($this->connection->getConfig()), [
=======
        $process = $this->makeProcess('mysql --host="${:LARAVEL_LOAD_HOST}" --port="${:LARAVEL_LOAD_PORT}" --user="${:LARAVEL_LOAD_USER}" --password="${:LARAVEL_LOAD_PASSWORD}" --database="${:LARAVEL_LOAD_DATABASE}" < "${:LARAVEL_LOAD_PATH}"');

        $process->mustRun(null, array_merge($this->baseVariables($this->connection->getConfig()), [
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            'LARAVEL_LOAD_PATH' => $path,
        ]));
    }

    /**
     * Get the base dump command arguments for MySQL as a string.
     *
     * @return string
     */
    protected function baseDumpCommand()
    {
<<<<<<< HEAD
        $command = 'mysqldump '.$this->connectionString().' --skip-add-locks --skip-comments --skip-set-charset --tz-utc';

        if (! $this->connection->isMaria()) {
            $command .= ' --column-statistics=0 --set-gtid-purged=OFF';
        }

        return $command.' "${:LARAVEL_LOAD_DATABASE}"';
    }

    /**
     * Generate a basic connection string (--socket, --host, --port, --user, --password) for the database.
     *
     * @return string
     */
    protected function connectionString()
    {
        $value = ' --user="${:LARAVEL_LOAD_USER}" --password="${:LARAVEL_LOAD_PASSWORD}"';

        $value .= $this->connection->getConfig()['unix_socket'] ?? false
                        ? ' --socket="${:LARAVEL_LOAD_SOCKET}"'
                        : ' --host="${:LARAVEL_LOAD_HOST}" --port="${:LARAVEL_LOAD_PORT}"';

        return $value;
=======
        $columnStatistics = $this->connection->isMaria() ? '' : '--column-statistics=0';

        $gtidPurged = $this->connection->isMaria() ? '' : '--set-gtid-purged=OFF';

        return 'mysqldump '.$gtidPurged.' '.$columnStatistics.' --skip-add-drop-table --skip-add-locks --skip-comments --skip-set-charset --tz-utc --host="${:LARAVEL_LOAD_HOST}" --port="${:LARAVEL_LOAD_PORT}" --user="${:LARAVEL_LOAD_USER}" --password="${:LARAVEL_LOAD_PASSWORD}" "${:LARAVEL_LOAD_DATABASE}"';
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }

    /**
     * Get the base variables for a dump / load command.
     *
     * @param  array  $config
     * @return array
     */
    protected function baseVariables(array $config)
    {
<<<<<<< HEAD
        $config['host'] = $config['host'] ?? '';

        return [
            'LARAVEL_LOAD_SOCKET' => $config['unix_socket'] ?? '',
            'LARAVEL_LOAD_HOST' => is_array($config['host']) ? $config['host'][0] : $config['host'],
            'LARAVEL_LOAD_PORT' => $config['port'] ?? '',
=======
        return [
            'LARAVEL_LOAD_HOST' => is_array($config['host']) ? $config['host'][0] : $config['host'],
            'LARAVEL_LOAD_PORT' => $config['port'],
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            'LARAVEL_LOAD_USER' => $config['username'],
            'LARAVEL_LOAD_PASSWORD' => $config['password'],
            'LARAVEL_LOAD_DATABASE' => $config['database'],
        ];
    }

    /**
     * Execute the given dump process.
     *
     * @param  \Symfony\Component\Process\Process  $process
     * @param  callable  $output
     * @param  array  $variables
     * @return \Symfony\Component\Process\Process
     */
    protected function executeDumpProcess(Process $process, $output, array $variables)
    {
        try {
            $process->setTimeout(null)->mustRun($output, $variables);
        } catch (Exception $e) {
            if (Str::contains($e->getMessage(), ['column-statistics', 'column_statistics'])) {
                return $this->executeDumpProcess(Process::fromShellCommandLine(
                    str_replace(' --column-statistics=0', '', $process->getCommandLine())
                ), $output, $variables);
            }

            throw $e;
        }

        return $process;
    }
}
