<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class CLI extends Command
{
    protected static $defaultName = 'sponge';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $descriptionText = 'Create sponge-text from a sentence and output to console';
        $this
            ->setDescription($descriptionText)
            ->setHelp($descriptionText)
            ->addArgument('sentence', InputArgument::OPTIONAL, 'sentence to spongify');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // the first argument
        $output->writeln('sentence: '. $input->getArgument('sentence'));

        return Command::SUCCESS;
    }
}
