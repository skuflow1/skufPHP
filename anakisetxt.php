<?php
function analyzeText($file) {
    $content = file_get_contents($file);
    $words = str_word_count($content, 1);
    $wordCount = count($words);
    $uniqueWords = array_unique($words);
    $uniqueWordCount = count($uniqueWords);

    return [
        "total_words" => $wordCount,
        "unique_words" => $uniqueWordCount,
        "most_common" => array_count_values($words)
    ];
}

$file = "text.txt";
$result = analyzeText($file);

echo "Всего слов: {$result['total_words']}\n";
echo "Уникальных слов: {$result['unique_words']}\n";
echo "Частота слов:\n";
print_r($result['most_common']);
?>
