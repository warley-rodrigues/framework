<?php

namespace Baseons\Minify;

class Minify
{
    public function css(string $css)
    {
        return (new CSS)->add($css)->execute();
    }

    public function js(string $js)
    {
        return (new JS)->add($js)->execute();
    }
}
