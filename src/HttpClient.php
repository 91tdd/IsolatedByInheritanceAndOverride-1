<?php

namespace IsolatedByInheritanceAndOverride;

use Exception;

class HttpClient
{
    public function post($uri, $params = [])
    {
        try {
            $body = file_get_contents($uri, false, $this->createContext($params));

            return new Response($body, 200);
        } catch (Exception $e) {
            return new Response($e->getMessage(), 404);
        }
    }

    private function createContext($params)
    {
        $data = http_build_query($params);

        return stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => implode("\r\n", [
                    'Content-type: application/x-www-form-urlencoded',
                    'Content-Length: '.strlen($data),
                ]),
                'content' => $data,
            ],
        ]);
    }
}
