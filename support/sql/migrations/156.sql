/*
	Date: 19 November 2018
	Migration: 156
	Description: New current location tracking method
*/

/*==========================================================================*/

create table ca_history_tracking_current_values (
   tracking_id                    int unsigned                   not null AUTO_INCREMENT,
   policy                         varchar(50)                    not null,
   
   /* Row this history tracking policy current value is bound to (Aka. the "subject") */
   table_num                      tinyint unsigned               not null,
   row_id                         int unsigned                   not null,
   
   /* Row that is current value for this history tracking policy */
   current_table_num              tinyint unsigned               not null,
   current_row_id                 int unsigned                   not null,
   
   /* Row that establishes current value. Eg. the relationship that links location (current value) to object (subject) */
   /* This may be the same as the target. The current value can always be derived from this tracked row. */
   tracked_table_num              tinyint unsigned               not null,
   tracked_row_id                 int unsigned                   not null,
   
   settings                       longtext                       not null,
   primary key (tracking_id),

   index i_policy			    (policy),
   index i_row_id				(row_id),
   
   /* Only one current value per subject per policy */
   unique index u_all           (row_id, table_num, policy), 
   
   index i_current              (current_row_id, current_table_num), 
   index i_tracked              (tracked_row_id, tracked_table_num)
) engine=innodb CHARACTER SET utf8 COLLATE utf8_general_ci;


/*==========================================================================*/


/* Always add the update to ca_schema_updates at the end of the file */
INSERT IGNORE INTO ca_schema_updates (version_num, datetime) VALUES (156, unix_timestamp());
