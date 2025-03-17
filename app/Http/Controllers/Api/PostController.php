<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\PathItem(
 *     path="/api"
 * ),
 *
 *  @OA\Info(
 *      title="Laravel TestShahboz",
 *     version="1.0.0"
 *  ),
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 * ),
 *
 */


class PostController extends Controller
{
    //
}
