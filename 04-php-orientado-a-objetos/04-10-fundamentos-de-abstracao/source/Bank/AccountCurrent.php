<?php

namespace source\Bank;

use source\App\Trigger;
use source\App\User;

class AccountCurrent extends Account {
    private $limit;

    public function __construct($branch, $account, User $user, $balance, $limit) {
    
        parent::__construct($branch, $account, $user, $balance);
        $this->limit = $limit;
    }

    final public function deposit($value)
    {
        $this->balance += $value;
        Trigger::show("Depósito de {$this->toBrl($value)} realizado com sucesso!", Trigger::ACCEPT);
    }

    final public function withdraw($value)
    {
        if ($value <= $this->balance + $this->limit) {
            $this->balance -= abs($value);
            Trigger::show("Saque de {$this->toBrl($value)} realizado com sucesso", Trigger::ERROR);

            if($this->balance < 0) {
                $tax = abs($this->balance) * 0.006;
                $this->balance -= $tax;
                Trigger::show("Taxa de uso de limite: {$this->toBrl($tax)}", Trigger::WARNING);
            }
        } else {
            $saving = $this->balance + $this->limit;
            Trigger::show("Saldo insuficiente. Você tem {$this->toBrl($saving)}!", Trigger::WARNING);
        }
    }
}
