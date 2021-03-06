<template>
    <el-table
            :data="table_data"
            style="width: 100%"
            @selection-change="handleSelectionChange">
        <el-table-column
                type="selection"
                width="55">
        </el-table-column>
        @foreach ($table_data as $table_datum)
            <el-table-column
                    prop="{{$table_datum['prop']}}"
                    label="{{$table_datum['label']}}"
                    min-width="180"
            >
            </el-table-column>
        @endforeach
        <el-table-column
                fixed="right"
                label="操作"
                width="200"
                header-align="center"
        >
            <template slot-scope="scope">
                <el-button @click="handleClick(scope.row)" size="small" type="primary" plain="true"
                           icon="el-icon-zoom-in"></el-button>
                <el-button size="small" type="primary" plain="true" icon="el-icon-edit"></el-button>
                <el-button size="small" type="danger" plain="true" icon="el-icon-delete"></el-button>
            </template>
        </el-table-column>
    </el-table>
</template>