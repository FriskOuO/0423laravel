<?php

namespace App\Services;

class AppleMusic
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
            'title' => 'Sample Podcast',
            'author' => 'Apple Music',
            'description' => 'This is a sample podcast fetched from Apple Music.',
            'episodes' => [
                ['title' => 'Episode 1', 'duration' => '30:00'],
                ['title' => 'Episode 2', 'duration' => '25:00'],
            ],
        ];
    }
}
