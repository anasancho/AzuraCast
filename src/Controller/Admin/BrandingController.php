<?php
namespace App\Controller\Admin;

use App\Http\Request;
use App\Http\Response;
use Psr\Http\Message\ResponseInterface;

class BrandingController extends SettingsController
{
    public function indexAction(Request $request, Response $response): ResponseInterface
    {
        return $this->renderSettingsForm($request, $response, 'admin/branding/index');
    }
}
