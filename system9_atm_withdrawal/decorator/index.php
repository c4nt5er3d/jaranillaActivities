<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$withdrawal = new MessagePrintDecorator(
    new BalanceCheckDecorator(
        new AccountCheckDecorator(
            new BasicWithdrawal()
        )
    )
);
$withdrawal->execute();
