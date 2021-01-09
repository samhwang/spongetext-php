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
            ->addArgument('sentence', InputArgument::IS_ARRAY, 'sentence to spongify');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $sentence = implode(" ", $input->getArgument('sentence'));
        $sponge = new Spongify();
        $spongetext = $sponge->spongify($sentence);
        $output->writeln($spongetext);

        return Command::SUCCESS;
    }
}
