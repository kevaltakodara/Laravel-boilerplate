@props(['href' => '#', 'permission' => false, 'extraClass' => '', 'dataValue' => ''])
<x-utils.link :href="$href" class="btn btn-info btn-sm {{ $extraClass }}" icon="fas fa-search" :text="__('View')" permission="{{ $permission }}" dataValue="{{ $dataValue }}"/>
