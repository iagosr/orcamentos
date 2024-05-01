<?php

namespace Iago\DesignPattern\Log;

class StdoutLogManager extends LogManager
{
    public function criarLogWritter(): Logwriter
    {
        return new StdoutLogWritter();
    }
}
