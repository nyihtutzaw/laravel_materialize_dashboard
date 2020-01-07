
var user_table=null;
$(document).ready(function(){

    $('.datepicker').datepicker({
        format:"yyyy-mm-dd"
    });
    
    $('select').formSelect();
     $('#user_datatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
    
    if ( $.fn.DataTable.isDataTable(user_table) ) {
        user_table.destroy();
      }
      

      
      user_table = $('#user_datatable').DataTable({

        processing: true,

        serverSide: true,

        ajax: '/dashboard/user/get',
        
        order: [[ 2, "desc" ]],

        columns: [
            
            { data: 'DT_RowIndex', name: 'No' , orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'phone', name: 'phone' },
            { data: 'status', name: 'status' ,
                render:function(data)
                {
                    if (data==1)
                    {
                        return "Active";
                    }
                    else 
                    {
                        return "Disabled";
                    }
                }
            },
            { data: 'last_payment_date', name: 'last_payment_date' },
            {  "mRender": function ( data, type, row ) {
                return `
                    <a href="/dashboard/user/edit?id=${row.id}" class="btn black darken-3"><i class="material-icons">edit</i></a>
                    
                `;
            }
            }
         
        ]

    });

        
    

    user_table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    

     
    
   

      $('select').formSelect();

  });
