<?php
/**
 * Class TiktokDownloader
 *
 * @author Furkan Sezgin (ZquaRe)
 * @mail furkan-sezgin@hotmail.com
 */

class TiktokDownloader
{
    public function Download($url)
    {

        if (preg_match("#tiktok.com#",$url))
        {
        // m.tiktok.com Checking if logged in or not
        if (preg_match("#Redirecting to <a href=#", $this->cUrl($url)))
        {
            $newUrl = explode('<a href="', $this->cUrl($url));
            $newUrl = explode('">', $newUrl[1]);
            $url = $newUrl[0];
        }

        preg_match_all('#<video playsinline="" loop="" src="(.*)#', $this->cUrl($url) , $Result);
        @$ResultExp = explode('<video playsinline="" loop="" src="', $Result[0][0]);
        @$ResultFinally = explode('preload="', $ResultExp[1]);
        return $ResultFinally[0];
        }
        else
        {
            return null;
        }
    }

    private function cUrl($url)
    {
        $user_agent = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
     
    }
}



