<?php
abstract class Context {
    protected $parent = null;

    function __construct(Context $parent=null) {
        $this->parent = $parent;
    }

    abstract function if(bool $bool): Context;

    abstract function say(string $str): Context;

    function endif(): Context {
        return $this->parent;
    }
}

class TrueContext extends Context {
    function if(bool $bool): Context {
        if ($bool) {
            return new self($this);
        } else {
            return new FalseContext($this);
        }
    }

    function say(string $str): Context {
        echo $str,PHP_EOL;
        return $this;
    }
}

class FalseContext extends Context {
    function if(bool $bool): Context {
        return new self($this);
    }

    function say(string $str): Context {
        return $this;
    }
}

function dsl(): TrueContext {
    return new TrueContext;
}

// 動作サンプル
dsl()
-> if (1)
    -> if (1)
        ->say('1 && 1')
    -> endif()

    -> if (0)
        ->say('1 && 0')
    -> endif()
-> endif()

->if (0)
    ->if (1)
        ->say('0 && 1')
    ->endif()

    ->if (0)
        ->say('0 && 0')
    ->endif()
->endif();
