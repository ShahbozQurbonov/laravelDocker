<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Post (
 *     path="/api/register",
 *     summary="Register",
 *     tags={"Auth"},
 *     @OA\Parameter (
 *         name="name",
 *         in="query",
 *         required=true,
 *         description="Имя пользователя",
 *         @OA\Schema (type="string", example="userName"),
 *     ),
 *     @OA\Parameter (
 *         name="email",
 *         required=true,
 *         in="query",
 *         description="Email",
 *         @OA\Schema (type="string",example="user@gmail.com"),
 *     ),
 *     @OA\Parameter  (
 *         name="password",
 *         in="query",
 *         required=true,
 *         description="Password",
 *         @OA\Schema (type="string",example="password"),
 *     ),
 *     @OA\Response (
 *         response=200,
 *         description="Пользователь успешно зарегистрирован",
 *         @OA\JsonContent (
 *             @OA\Property (property="user" , type="object",
 *                 @OA\Property (property="id",type="integer",example=1),
 *                 @OA\Property (property="name",type="string",example="UserName"),
 *                 @OA\Property (property="email",type="string",example="user@gmail.com"),
 *                 @OA\Property (property="pasword",type="string",example="your_pasword"),
 *             ),
 *         ),
 *     ),
 * ),
 *
 *
 *
 * @OA\Post(
 *     path="/api/login",
 *     summary="Login",
 *     tags={"Auth"},
 *     @OA\Parameter (
 *         name="email",
 *         in="query",
 *         required=true,
 *         description="Email пользователяя",
 *         @OA\Schema (type="string",example="user@gmail.com"),
 *     ),
 *     @OA\Parameter (
 *         name="password",
 *         in="query",
 *         required=true,
 *         description="Password",
 *         @OA\Schema (type="string",example="password"),
 *     ),
 *
 *     @OA\Response (
 *         response=200,
 *         description="Токен аутентификации",
 *         @OA\JsonContent (
 *             @OA\Property (property="token",type="string",example="your_token"),
 *         )
 *     ),
 * )
 *
 */

class AuthController extends Controller
{
    //
}
