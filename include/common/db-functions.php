<?php



    /**
     *
     * Return all of the current user's cards.
     *
     *
     * $db - DB object that is connected to MySQL
     * $user_id - Current user's ID(PK)
     *
     * return $rows - a list of the current user's cards.
     *
     **/

    function get_my_cards( $db, $user_id ){
        
        if( !$db ){
            return false;
        }
        
        if( !$user_id ){
            return false;
        }
        
        $sql = "SELECT card.id, card.company, card.img
              FROM card_holder
              INNER JOIN card
                     ON card_holder.card_id = card.id
              WHERE user_id = $user_id";

        $statement = $db->prepare($sql);

        // Run!
        $statement->execute();

        // Get all the rows.
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);       
        
        return $rows;
    }



    /**
     *
     * Get all cards
     *
     *
     * $db - DB object that is connected to MySQL
     *
     * return $rows - all cards in the database
     *
     **/


    function get_all_cards( $db ){
        
        if( !$db ){
            return false;
        }
        
        $sql = "SELECT * FROM card";

        $statement = $db->prepare($sql);

        // Run!
        $statement->execute();

        // Get all the rows.
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);     
        
        return $rows;

    }
    

    /**
     *
     * Return card informatino
     *
     *
     * $db - DB object that is connected to MySQL
     * $user_id - Current user's ID(PK)
     * $card_id - Target card ID(PK)
     *
     * return $row - Card found.
     *
     **/

    function get_card_info( $db, $user_id, $card_id ){
        
        if( !$db ){
            return false;
        }
        
        if( !$card_id ){
            return false;
        }

        $sql = "SELECT card.img, card_holder.barcode, card_holder.note
                  FROM card_holder
            INNER JOIN card
                    ON card_holder.card_id = card.id
                  WHERE user_id = $user_id
                    AND card_id = $card_id";

        $statement = $db->prepare($sql);

        // Run!
        $statement->execute();

        // Get all the rows.
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC); 
        $row = $rows[0];
        
        return $row;
    }

    function update_card( $db, $card_id, $barcode, $note ){
    
        //
        // Check if already registered
        //
        
        if( !$card_id ){
            return false;
        }

        $sql = "UPDATE card_holder
                    SET barcode = $barcode,
                        note    = '$note'
                 WHERE card_id = $card_id
                    AND user_id = 2"; //Hyunji's ID

        $statement = $db->prepare($sql);
        $statement->execute();
        $count = $statement->rowCount();
        
        return $count;
    }


    function sign_in( $db, $username, $password ){
        //
        // Check if already registered
        //

        $sql = "SELECT * FROM user
                WHERE username LIKE '$username'
                  AND password LIKE '$password'";

        $statement = $db->prepare($sql);
        $statement->execute();
        $count = $statement->rowCount(); 
        return $count;
    }