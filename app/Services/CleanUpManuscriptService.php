<?php

namespace App\Services;

class CleanUpManuscriptService
{
    public static function clean(string $text): string
    {
        // Pattern to match the desired blocks and capture the reference and blockquote text
        $pattern = '/> \[!bible\] \[([^]]+)\]\(https?:\/\/[^\)]+\)\n((?:> .*\n?)+)/';

        // Function to extract and clean the bible blocks
        function extractAndCleanBibleBlocks($text, $pattern)
        {
            preg_match_all($pattern, $text, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $reference = $match[1];
                $blockquoteText = $match[2];

                // Remove the initial blockquote symbol and clean up the text
                $cleanedBlock = "$reference\n$blockquoteText";
                $cleanedBlock = preg_replace('/^> /m', '', $cleanedBlock);  // Remove blockquote syntax

                // Add blockquote symbol back to each line of the cleaned block
                $cleanedBlock = preg_replace('/^/m', '> ', $cleanedBlock);

                // Replace the original matched text with the cleaned block
                $text = str_replace($match[0], $cleanedBlock, $text);
            }

            return $text;
        }

        // Extract and clean the bible blocks
        $cleanedText = extractAndCleanBibleBlocks($text, $pattern);

        // Remove all instances of "- KJV" from the text
        $cleanedText = str_replace('- KJV', '', $cleanedText);

        // Finish
        return $cleanedText;
    }
}
