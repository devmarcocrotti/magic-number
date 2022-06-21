<?php

namespace App\Command;

use App\Service\MagicNumber;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MagicNumberCommand extends Command {
    protected function configure(): void
    {
        $this->setName("custom:magic:number")
        ->setHelp('This command return a random number')
        ->addArgument('maxLimit', InputArgument::OPTIONAL, 'Pass the max limit.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Magic Number',
            '============',
        ]);
        $rn = new MagicNumber();
        $output->writeln([$rn->getMagicNumber($input->getArgument('maxLimit') ?? null), '']);

        return Command::SUCCESS;
    }
}
