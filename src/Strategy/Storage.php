<?php

namespace Src\Strategy;

interface Storage
{
    public function persist(array $data): bool;
}
