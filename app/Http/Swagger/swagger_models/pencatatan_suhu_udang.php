<?php

/**
  * @OA\Get(
  *      path="/v1/entities/pencatatan-suhu-udang",
  *      operationId="browsePencatatanSuhuUdang",
  *      tags={"pencatatan-suhu-udang"},
  *      summary="Browse Pencatatan Suhu Udang",
  *      description="Returns list of Pencatatan Suhu Udang",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/pencatatan-suhu-udang/read?slug=pencatatan-suhu-udang&id={id}",
  *      operationId="readPencatatanSuhuUdang",
  *      tags={"pencatatan-suhu-udang"},
  *      summary="Get Pencatatan Suhu Udang based on id",
  *      description="Returns Pencatatan Suhu Udang based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/pencatatan-suhu-udang/add",
  *      operationId="addPencatatanSuhuUdang",
  *      tags={"pencatatan-suhu-udang"},
  *      summary="Insert new Pencatatan Suhu Udang",
  *      description="Insert new Pencatatan Suhu Udang into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggalJam":"2021-01-01T00:00:00.000Z", "suhu":"123", "action":"Abc", "idPegawai":"Abc", "catatan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/pencatatan-suhu-udang/edit",
  *      operationId="editPencatatanSuhuUdang",
  *      tags={"pencatatan-suhu-udang"},
  *      summary="Edit an existing Pencatatan Suhu Udang",
  *      description="Edit an existing Pencatatan Suhu Udang",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggalJam":"2021-01-01T00:00:00.000Z", "suhu":"123", "action":"Abc", "idPegawai":"Abc", "catatan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/pencatatan-suhu-udang/delete",
  *      operationId="deletePencatatanSuhuUdang",
  *      tags={"pencatatan-suhu-udang"},
  *      summary="Delete one record of Pencatatan Suhu Udang",
  *      description="Delete one record of Pencatatan Suhu Udang",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="pencatatan-suhu-udang",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/pencatatan-suhu-udang/delete-multiple",
  *      operationId="deleteMultiplePencatatanSuhuUdang",
  *      tags={"pencatatan-suhu-udang"},
  *      summary="Delete multiple record of Pencatatan Suhu Udang",
  *      description="Delete multiple record of Pencatatan Suhu Udang",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="pencatatan-suhu-udang",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/pencatatan-suhu-udang/sort",
  *      operationId="sortPencatatanSuhuUdang",
  *      tags={"pencatatan-suhu-udang"},
  *      summary="Sort existing Pencatatan Suhu Udang",
  *      description="Sort existing Pencatatan Suhu Udang",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="pencatatan-suhu-udang",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggalJam":"2021-01-01T00:00:00.000Z", "suhu":"123", "action":"Abc", "idPegawai":"Abc", "catatan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggalJam":"2021-01-01T00:00:00.000Z", "suhu":"123", "action":"Abc", "idPegawai":"Abc", "catatan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggalJam"), 
  *                         @OA\Property(type="integer", property="suhu"), 
  *                         @OA\Property(type="string", property="action"), 
  *                         @OA\Property(type="string", property="idPegawai"), 
  *                         @OA\Property(type="string", property="catatan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */