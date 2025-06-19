<?php

class User_model extends Database
{
    private $user = "users"; // Sesuaikan dengan nama tabel yang benar di database

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Mendapatkan pengguna berdasarkan username.
     *
     * @param string $username Nama pengguna
     * @return array|bool Data pengguna jika ditemukan, false jika tidak ditemukan
     */
    public function getUsers($username = "")
    {
        if ($username !== "") {
            // Query untuk mendapatkan pengguna berdasarkan username
            $this->query("SELECT * FROM $this->user WHERE username = :username");
            $this->bind(':username', $username);
            return $this->single();
        } else {
            // Mengambil semua pengguna jika username tidak diberikan
            $this->query("SELECT * FROM $this->user");
            return $this->resultSet();
        }
    }

    public function getMotivation() {
        // Array berisi kata-kata motivasi tentang programming
        $motivations = array(
            "Code is like humor. When you have to explain it, it’s bad.",
            "Simplicity is the soul of efficiency.",
            "The best way to predict the future is to invent it.",
            "Talk is cheap. Show me the code.",
            "Programming isn't about what you know; it's about what you can figure out.",
            "First, solve the problem. Then, write the code.",
            "Good code is its own best documentation.",
            "Code never lies, comments sometimes do.",
            "If you think your code is perfect, you’re not looking at it hard enough.",
            "The only way to learn a new programming language is by writing programs in it.",
            "The code you write makes you who you are.",
            "Writing code is not just about making a machine do something; it’s about making yourself smarter.",
            "Code quality is a reflection of the developer's attitude.",
            "There are only two kinds of languages: the ones people complain about and the ones nobody uses.",
            "Don’t worry if it doesn’t work right. If everything did, you’d be out of a job.",
            "Software development is a continuous journey of learning and improvement.",
            "Debugging is like being the detective in a crime movie where you are also the murderer.",
            "Good programmers use their brains, not their butt.",
            "The best code is no code at all.",
            "Optimism is an occupational hazard of programming: feedback is the treatment.",
            "Programming is not about typing, it's about thinking.",
            "You might not think that programmers are artists, but programming is an extremely creative profession.",
            "Code should be written to be read by humans first, and then executed by machines.",
            "The sooner you start to code, the longer the program will take.",
            "The greatest enemy of progress is not stagnation, but false progress."
        );

        // Pilih kata motivasi secara acak
        return $motivations[array_rand($motivations)];
    }

}
