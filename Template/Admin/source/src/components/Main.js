/**
 * Created by root on 17-8-20.
 */
import React ,{Component} from 'react';
import { Table, Badge, Menu, Dropdown, Icon ,Input} from 'antd';



class Main extends Component{
    state={
        columns: [
            { title: 'Name', dataIndex: 'name', key: 'name' },
            { title: 'Platform', dataIndex: 'platform', key: 'platform',
                render: (text, record, index) => this.renderColumns(this.state.data, index, 'address', text),
            },
            { title: 'Version', dataIndex: 'version', key: 'version' },
            { title: 'Upgraded', dataIndex: 'upgradeNum', key: 'upgradeNum' },
            { title: 'Creator', dataIndex: 'creator', key: 'creator' },
            { title: 'Date', dataIndex: 'createdAt', key: 'createdAt' },
            { title: 'Action', key: 'operation', render: (text,record,index) =>

                <a href="#">Edit</a> },
        ],
        data : []
    }
    renderColumns(data, index, key, text) {
        return(
            <Input key={index} onChange={value => this.onChange(key, index,value)}/>
        )
    }
    handleChange(e){

    }
    onChange(key, index, value){
        console.log(key, index, value.target.value);
    }
    constructor(props){
            super(props);
        for (let i = 0; i < 3; ++i) {
            this.state.data.push({
                key: i,
                createdAt: '2014-12-24 23:12:00',
                name: 'This is production name',
                upgradeNum: 'Upgraded: 56',
            });
        }
    }

    render () {
        console.log(this.columns)
        return (
            <div>
                <Table
                    bordered
                    className="components-table-demo-nested"
                    columns={this.state.columns}
                    dataSource={this.state.data}
                    pagination={false}
                />
            </div>
        )
    }


}

export default Main;