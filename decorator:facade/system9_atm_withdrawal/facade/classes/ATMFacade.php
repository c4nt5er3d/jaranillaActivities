<?php
class ATMFacade {
    private AccountService $account;
    private BalanceService $balance;
    private WithdrawalService $withdrawal;
    private MessageService $message;

    public function __construct() {
        $this->account = new AccountService();
        $this->balance = new BalanceService();
        $this->withdrawal = new WithdrawalService();
        $this->message = new MessageService();
    }

    public function performWithdrawal(): void {
        echo "--- Starting ATM Withdrawal ---" . PHP_EOL;
        $this->account->checkAccount();
        $this->balance->checkBalance();
        $this->withdrawal->withdraw();
        $this->message->printMessage();
        echo "--- Transaction Complete ---" . PHP_EOL;
    }
}
