<?php

/**
  * @OA\Get(
  *      path="/v1/entities/pencatatan-suhu-air",
  *      operationId="browsePencatatanSuhuAir",
  *      tags={"pencatatan-suhu-air"},
  *      summary="Browse Pencatatan Suhu Air",
  *      description="Returns list of Pencatatan Suhu Air",
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
  *      path="/v1/entities/pencatatan-suhu-air/read?slug=pencatatan-suhu-air&id={id}",
  *      operationId="readPencatatanSuhuAir",
  *      tags={"pencatatan-suhu-air"},
  *      summary="Get Pencatatan Suhu Air based on id",
  *      description="Returns Pencatatan Suhu Air based on id",
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
  *      path="/v1/entities/pencatatan-suhu-air/add",
  *      operationId="addPencatatanSuhuAir",
  *      tags={"pencatatan-suhu-air"},
  *      summary="Insert new Pencatatan Suhu Air",
  *      description="Insert new Pencatatan Suhu Air into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "hari":"2021-01-01T00:00:00.000Z", "delapan":"Abc", "suhu1":"Abc", "sepuluh":"Abc", "suhu2":"Abc", "duabelas":"Abc", "suhu3":"Abc", "empatbelas":"Abc", "suhu4":"Abc", "acon":"Abc", "namaPegawai":"Abc", "paraf":"Abc"},
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
  *      path="/v1/entities/pencatatan-suhu-air/edit",
  *      operationId="editPencatatanSuhuAir",
  *      tags={"pencatatan-suhu-air"},
  *      summary="Edit an existing Pencatatan Suhu Air",
  *      description="Edit an existing Pencatatan Suhu Air",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "hari":"2021-01-01T00:00:00.000Z", "delapan":"Abc", "suhu1":"Abc", "sepuluh":"Abc", "suhu2":"Abc", "duabelas":"Abc", "suhu3":"Abc", "empatbelas":"Abc", "suhu4":"Abc", "acon":"Abc", "namaPegawai":"Abc", "paraf":"Abc"},
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
  *      path="/v1/entities/pencatatan-suhu-air/delete",
  *      operationId="deletePencatatanSuhuAir",
  *      tags={"pencatatan-suhu-air"},
  *      summary="Delete one record of Pencatatan Suhu Air",
  *      description="Delete one record of Pencatatan Suhu Air",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="pencatatan-suhu-air",
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
  *      path="/v1/entities/pencatatan-suhu-air/delete-multiple",
  *      operationId="deleteMultiplePencatatanSuhuAir",
  *      tags={"pencatatan-suhu-air"},
  *      summary="Delete multiple record of Pencatatan Suhu Air",
  *      description="Delete multiple record of Pencatatan Suhu Air",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="pencatatan-suhu-air",
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
  *      path="/v1/entities/pencatatan-suhu-air/sort",
  *      operationId="sortPencatatanSuhuAir",
  *      tags={"pencatatan-suhu-air"},
  *      summary="Sort existing Pencatatan Suhu Air",
  *      description="Sort existing Pencatatan Suhu Air",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="pencatatan-suhu-air",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggal":"Abc", "hari":"2021-01-01T00:00:00.000Z", "delapan":"Abc", "suhu1":"Abc", "sepuluh":"Abc", "suhu2":"Abc", "duabelas":"Abc", "suhu3":"Abc", "empatbelas":"Abc", "suhu4":"Abc", "acon":"Abc", "namaPegawai":"Abc", "paraf":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggal":"Abc", "hari":"2021-01-01T00:00:00.000Z", "delapan":"Abc", "suhu1":"Abc", "sepuluh":"Abc", "suhu2":"Abc", "duabelas":"Abc", "suhu3":"Abc", "empatbelas":"Abc", "suhu4":"Abc", "acon":"Abc", "namaPegawai":"Abc", "paraf":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggal"), 
  *                         @OA\Property(type="string", property="hari"), 
  *                         @OA\Property(type="string", property="delapan"), 
  *                         @OA\Property(type="string", property="suhu1"), 
  *                         @OA\Property(type="string", property="sepuluh"), 
  *                         @OA\Property(type="string", property="suhu2"), 
  *                         @OA\Property(type="string", property="duabelas"), 
  *                         @OA\Property(type="string", property="suhu3"), 
  *                         @OA\Property(type="string", property="empatbelas"), 
  *                         @OA\Property(type="string", property="suhu4"), 
  *                         @OA\Property(type="string", property="acon"), 
  *                         @OA\Property(type="string", property="namaPegawai"), 
  *                         @OA\Property(type="string", property="paraf"), 
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