CREATE TRIGGER c
before INSERT ON users FOR EACH ROW
BEGIN
    DECLARE variation_id integer;
    SELECT `variation_id` into variation_id FROM `variation_option` WHERE `vopid` = new.vopid


    DECLARE boolean varchar(10);
    select if( variation_id in (SELECT variation_id from (SELECT `inventory_item_id`, vopid, variation_id FROM `product_configuration` left join variation_option on product_configuration.variation_option_id = variation_option.vopid left join variation on variation.vid = variation_option.variation_id where variation.product_id = 101 ORDER by variation.product_id ) as a where inventory_item_id = 77), "true", "false") into boolean


   # DECLARE cur CURSOR FOR SELECT project_id FROM user_team_project_relationships WHERE user_team_id = m_user_team_id;

    #OPEN cur;
       # ins_loop: LOOP
          #  FETCH cur INTO m_projects_id;
         #   IF done THEN
        #        LEAVE ins_loop;
        #    END IF;
       #     INSERT INTO users_projects (user_id, project_id, created_at, updated_at, project_access)
      #      VALUES (NEW.id, m_projects_id, now(), now(), 20);
     #   END LOOP;
    #CLOSE cur;
END//


SELECT `inventory_item_id`, vopid, variation_id FROM `product_configuration` left join variation_option on product_configuration.variation_option_id = variation_option.vopid left join variation on variation.vid = variation_option.variation_id where variation.product_id = 101 and `inventory_item_id` = 77 ORDER by variation.product_id