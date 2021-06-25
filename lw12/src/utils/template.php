<?php

function renderTemplate(string $tplName, array $args = []): void
{
    include SRC_PATH . "/templates/{$tplName}";
}