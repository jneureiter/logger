<?php
namespace Jneureiter\Logger;

interface ILogger{
    public function LogEntry(string $line): void;

}