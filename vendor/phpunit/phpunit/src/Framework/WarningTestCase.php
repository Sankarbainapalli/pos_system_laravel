<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class WarningTestCase extends TestCase
{
    /**
     * @var bool
     */
    protected $backupGlobals = false;

    /**
     * @var bool
     */
    protected $backupStaticAttributes = false;

    /**
     * @var bool
     */
    protected $runTestInSeparateProcess = false;

    /**
<<<<<<< HEAD
=======
     * @var bool
     */
    protected $useErrorHandler = false;

    /**
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     * @var string
     */
    private $message;

<<<<<<< HEAD
    public function __construct(string $message = '')
    {
        $this->message = $message;

=======
    /**
     * @param string $message
     */
    public function __construct($message = '')
    {
        $this->message = $message;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        parent::__construct('Warning');
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Returns a string representation of the test case.
     */
    public function toString(): string
    {
        return 'Warning';
    }

    /**
     * @throws Exception
     *
     * @psalm-return never-return
     */
    protected function runTest(): void
    {
        throw new Warning($this->message);
    }
}
