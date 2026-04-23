<?php

namespace App\Services;

class SpotifyMusic
{
    /**
     * @return array{
     *     id: string,
     *     title: string,
     *     author: string,
     *     description: string,
     *     episodes: array<int, array{title: string, duration: string}>
     * }
     */
    public function findPodcast(string $id): array
    {
        return [
            'id' => $id,
            'title' => 'Tech Pulse Weekly',
            'author' => 'Spotify Originals',
            'description' => 'A sample podcast fetched from SpotifyMusic service.',
            'episodes' => [
                ['title' => 'AI Trends 2026', 'duration' => '28:40'],
                ['title' => 'Cloud Native Update', 'duration' => '31:10'],
            ],
        ];
    }
}
