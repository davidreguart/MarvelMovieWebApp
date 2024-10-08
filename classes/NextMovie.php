<?php

    declare(strict_types=1);

    class NextMovie {
        public function __construct(
            private string $title,
            private int $days_until,
            private string $following_production,
            private string $release_date,
            private string $poster_url,
            private string $overview,
        )
        {}

        public function get_until_message ():string {

            $days = $this->days_until;

            return match(true) {
                $days === 0     => "today",
                $days === 1     => "tomorrow",
                $days < 7       => "within the next 7 days.",
                $days <30       => "within the next 30 days.",
                default         => "$days days to go until the premiere.",
            };
        }

        public static function fetch_and_create_movie(string $api_url):NextMovie {
            $result = file_get_contents($api_url);
            $data = json_decode($result, true);
            
            
            return new self(
                $data["title"],
                $data["days_until"],
                $data["following_production"]["title"] ?? "Desconocido",
                $data["release_date"],
                $data["poster_url"],
                $data["overview"],
            );
        }
        
        public function get_data() {
            return get_object_vars($this);
        }
    }


?>