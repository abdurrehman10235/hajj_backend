<?php

/**
 * Script to download placeholder images for Hajj services
 * Run this script from the backend directory: php download_images.php
 */

// List of images to download with their corresponding URLs
$images = [
    // Hajj Application Process
    'visit_agent.jpg' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&h=300&fit=crop&crop=faces',
    'prepare_documents.jpg' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&h=300&fit=crop',
    'payment_method.jpg' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=300&fit=crop',
    'setup_hotel.jpg' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400&h=300&fit=crop',
    
    // Terms and Policies
    'hajj_guidelines.jpg' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop',
    'visa_requirements.jpg' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop',
    'health_regulations.jpg' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop',
    'financial_policies.jpg' => 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=400&h=300&fit=crop',
    
    // Religious Places
    'kaaba_haram.jpg' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=400&h=300&fit=crop',
    'mount_arafat.jpg' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop',
    'muzdalifah.jpg' => 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?w=400&h=300&fit=crop',
    'mina_jamarat.jpg' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop',
    'masjid_nabawi.jpg' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=400&h=300&fit=crop',
    'mount_uhud.jpg' => 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?w=400&h=300&fit=crop',
    
    // Hajj Procedures
    'ihram_preparation.jpg' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop',
    'tawaf_procedure.jpg' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=400&h=300&fit=crop',
    'sai_procedure.jpg' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop',
    'day_arafat.jpg' => 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?w=400&h=300&fit=crop',
    'stoning_jamarat.jpg' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop',
    'sacrifice_ritual.jpg' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop',
    
    // Medical Help
    'king_abdullah_medical.jpg' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=400&h=300&fit=crop',
    'ajyad_hospital.jpg' => 'https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=400&h=300&fit=crop',
    'madinah_hospital.jpg' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?w=400&h=300&fit=crop',
    'mobile_medical.jpg' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=300&fit=crop',
    'pharmacy_services.jpg' => 'https://images.unsplash.com/photo-1585435557343-3b092031fad3?w=400&h=300&fit=crop',
    
    // Hotel Routes
    'makkah_hilton_route.jpg' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400&h=300&fit=crop',
    'fairmont_route.jpg' => 'https://images.unsplash.com/photo-1540541338287-41700207dee6?w=400&h=300&fit=crop',
    'conrad_route.jpg' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400&h=300&fit=crop',
    'movenpick_route.jpg' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=400&h=300&fit=crop',
    'general_navigation.jpg' => 'https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?w=400&h=300&fit=crop',
];

// Directory to save images
$imageDir = __DIR__ . '/public/services/';

// Create directory if it doesn't exist
if (!is_dir($imageDir)) {
    mkdir($imageDir, 0755, true);
}

echo "Starting image download...\n";

foreach ($images as $filename => $url) {
    echo "Downloading {$filename}... ";
    
    // Download image using cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
    
    $imageData = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if ($httpCode == 200 && $imageData !== false) {
        file_put_contents($imageDir . $filename, $imageData);
        echo "✓ Success\n";
    } else {
        echo "✗ Failed (HTTP: {$httpCode})\n";
    }
    
    curl_close($ch);
    
    // Small delay to be respectful to the server
    usleep(500000); // 0.5 seconds
}

echo "\nImage download complete!\n";
echo "Images saved to: {$imageDir}\n";

// List downloaded files
echo "\nDownloaded files:\n";
$files = glob($imageDir . '*.jpg');
foreach ($files as $file) {
    $size = filesize($file);
    $filename = basename($file);
    echo "  {$filename} (" . number_format($size / 1024, 2) . " KB)\n";
}

echo "\nTotal files: " . count($files) . "\n";
?>
