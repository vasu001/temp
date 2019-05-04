<?php
	/**
	 * Connect to database
	 *
	 * @param string $dbhost
	 * @param string $dbname
	 * @param string $dbuser
	 * @param string $dbpass
	 *
	 * @return mysqli
	 */
	function connect( string $dbhost, string $dbname, string $dbuser, string $dbpass ) {
		$db = new mysqli( $dbhost, $dbuser, $dbpass, $dbname );

		if ( $db->connect_error ) {
			die(
				"Error connecting to database: " . $db->connect_error . "\n" .
				$db->connect_errno
			);
		}

		return $db;
	}

	/**
	 * @param mysqli $db
	 * @param string $sql
	 */
	function createTable( mysqli $db, string $sql ) {
		if ( ! $db->query( $sql ) ) {
			var_dump( $sql );
			die( "$db->errno:$db->error" );
		}
	}


	/**
	 * Select all the data from the given table
	 *
	 * @param mysqli $db
	 * @param string $tablename
	 *
	 * @return array
	 */
	function fetchAll( mysqli $db, string $tablename ) {
		$records = [];

		$sql = "SELECT * FROM";
		$sql .= " $tablename";

		$results = $db->query( $sql );

		while ( $row = $results->fetch_assoc() ) {
			$records[] = $row;
		}

		return $records;
	}

	/**
	 * Insert data into tablename, in tablecolsname with values of records
	 *
	 * @param mysqli $db
	 * @param string $tablename
	 * @param array $tablecolsname
	 * @param array $records
	 *
	 * @return mixed|null
	 */
	function insertData( mysqli $db, string $tablename, array $tablecolsname, array $records ) {
		$finalrecord   = null;
		$colsnumber    = count( $tablecolsname );
		$recordsnumber = count( $records );
		if ( $recordsnumber != 0 ) {
			$recordsinnernumber = count( $records[0] );
			$sql                = "INSERT INTO";
			$sql                .= " `$tablename` (";
			$i                  = 0;
			while ( $i < $colsnumber ):
				$sql .= "`" . $tablecolsname[ $i ] . "`";
				if ( ! ( $i == $colsnumber - 1 ) ) {
					$sql .= ", ";
				}
				$i ++;
			endwhile;
			$i    = 0;
			$forc = 1;
			$sql  .= ") VALUES";
			foreach ( $records as $record ) {
				$sql .= "(";
				while ( $i < $recordsinnernumber ):
					if ( gettype( $record[ $i ] ) == 'string' ) {
						$sql .= "'" . $record[ $i ] . "'";
					} else {
						$sql .= "$record[$i]";
					}
					if ( ! ( $i == $recordsinnernumber - 1 ) ) {
						$sql .= ", ";
					}
					$i ++;
				endwhile;
				$i = 0;
				if ( $forc < $recordsnumber ) {
					$sql .= "),";
					$forc ++;
				} else {
					$sql .= ")";
				}
			}


			if ( ! $db->query( $sql ) ) {
				var_dump( $sql );
				die( "Cannot insert record: $db->error" );
			}
			$finalrecord = $db->insert_id;
		}

		return $finalrecord;
	}
