<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Restaurant">
        <meta name="author" content="Folau Kaveinga">
        <meta name="generator" content="Kaveinga">

        <title>Restaurant</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        @include('includes.css')
        @include('includes.javascript')
</head>
<body>
    @include('layouts.landing.navbar')