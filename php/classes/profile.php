<?php

/**
 *
 * profile, profile that is used to upload tracks
 *
 * profiles can only upload unique tracks
 *
 * $author Jude Chavez <chavezjude7@gamil.comn>
 *
 */
	class Profile {
		/**
		 * id for the profile; this is the primary key
		 * @var int $profileId
		 **/
		private $profileId;
		/**
		 * downloads unique track
		 * @var int $tackname
		 **/
		private $trackId;
		/**
		 * $uniquetrack
		 **/

		/**
		 * accessor method for profile
		 *
		 * @return int value of profile id
		 */
		public function getProfileId() {
			return ($this->profileId);
		}

		/**
		 * @param int $newprofileId new value of profile id
		 * @throws InvalidArgumentException if profile id is not an integer
		 * @throws RangeException if profile id is negative
		 **/

		public function setProfileId($newProfileId) {
			if($newProfileId ===null) {
				$this->profileId = null;
				return;
			}
			$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
			if($newProfileId == false) {

			}
			if ($newProfileId <= 0) {
				throw(new RangeException("profile id must be positve"));
			}
			$this->profileId = $newProfileId;
		}

	}

