<?php

if (!function_exists('img_asset')) {
    /**
     * Helper khusus untuk menghasilkan URL asset gambar di dalam folder public/images/
     * 
     * @param string $path Subfolder dan nama file (contoh: 'team/Kahim.svg')
     * @return string
     *
     * Lamun hayang pake Cloud Storage
     * @$cloudUrl = 'https://res.cloudinary.com/namacloudkamu/image/upload/';
     * @return $cloudUrl . ltrim($path, '/');
     */
    function img_asset(string $path = ''): string
    {
        return asset('images/' . ltrim($path, '/'));
    }
}