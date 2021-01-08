<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class CLI extends Command
{
    protected static $defaultName = 'sponge';

    public function __construct(string $sentence = '')
    {
        $this->sentence = $sentence;
        parent::__construct();
    }

    protected function configure()
    {
        $descriptionText = 'Create sponge-text from a sentence and output to console';
        $this
            ->setDescription($descriptionText)
            ->setHelp($descriptionText)
            ->addArgument('sentence', $this->sentence ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'sentence to spongify');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return Command::SUCCESS;
    }
}
