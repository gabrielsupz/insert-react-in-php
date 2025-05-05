<?php

class PartySeed
{
    public function run()
    {
        // Connecting to the Doctrine Manager
        $connection = Doctrine_Manager::getInstance()->getCurrentConnection();

        // Checking if the 'Partido' table already has data
        $existingParties = Doctrine_Core::getTable('Partido')->findAll();
        if (count($existingParties) > 0) {
            echo "The Partido table is already populated.\n";
            return;
        }

        // Adding some parties
        $partyNames = array(
            'Party A',
            'Party B',
            'Party C'
        );

        foreach ($partyNames as $partyName) {
            $partido = new Partido(); // Matches database table name
            $partido->setNome($partyName);
            $partido->save(); // created_at and updated_at will be auto-set
            echo "Party '{$partyName}' successfully added to the Partido table.\n";
        }

        echo "Seed executed successfully.\n";
    }
}
