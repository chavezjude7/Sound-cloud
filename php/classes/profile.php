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

		/**
		 * accessor method for profile
		 *
		 * @return int value of profile id
		 */
		public function getTrackId() {
			return $this->trackId;
		}

		/**
		 * @param int $newprofileId new value of profile id
		 * @throws InvalidArgumentException if profile id is not an integer
		 * @throws RangeException if profile id is negative
		 **/

		public function setTrackId($trackId) {
			if($newTrackId ===null) {
				$his->profileId = null;
				return;
			}
			$newTrackId = filter_var($newTrackId, FILTER_VALIDATE_INT);
			if($newTrackId == false) {

			}
			if ($newTrackId <=0) {
				throw(new RangeException("track id must be positve"));
			}
			$this->trackId = $newTrackId
		}

		$track = new profile(); //default, empty object
		$track->setProfileId(32);
		$track->setTrackId(128);



	}

