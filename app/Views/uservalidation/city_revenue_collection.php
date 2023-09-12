<script type="text/javascript">
    $(document).on("submit", "#addCityuserRevenueCollection", function() {
        // var vvv = $(this).serialize();
        $.post("addCityuserRevenueCollection", $(this).serialize(), function(data) {
            if (data.res == "success") {
                Swal.fire(
                    'Success',
                    'Revenue Collection Successfully Added',
                    'success'
                )
                $('#addCityuserRevenueCollection')[0].reset();
                refreshDiv();
            }
        }, 'json')
        return false;
    });


    function editCityUserRevenue(crv_id) {
        var crv_id = crv_id !== null ? crv_id : 0;
        if (crv_id) {
            $.post("getRevColCityOnId", {
                city_revenue_id: crv_id
            }, function(getEditRevenueRow) {
                var getEditDataRevenue = JSON.parse(getEditRevenueRow);
                let revenue_id = getEditDataRevenue.id;

                let rev_no_of_bill_generated = getEditDataRevenue.no_bill_generated !== null ? getEditDataRevenue.no_bill_generated : "";
                let rev_nos_bill_distributed = getEditDataRevenue.no_bill_distributed !== null ? getEditDataRevenue.no_bill_distributed : "";
                let rev_incentive_paid_to_jalsathi = getEditDataRevenue.incentive_paid_to_jalasathi !== null ? getEditDataRevenue.incentive_paid_to_jalasathi : "";
                let rev_total_revenue_collected = getEditDataRevenue.total_revenue_collected !== null ? getEditDataRevenue.total_revenue_collected : "";
                let rev_revenue_collected_by_jalasathi = getEditDataRevenue.revenue_collected_by_jalasathi !== null ? getEditDataRevenue.revenue_collected_by_jalasathi : "";

                $('#revenue_id').val(revenue_id);

                $('#rev_no_of_bill_generated').val(rev_no_of_bill_generated);
                $('#rev_nos_bill_distributed').val(rev_nos_bill_distributed);
                $('#rev_incentive_paid_to_jalsathi').val(rev_incentive_paid_to_jalsathi);
                $('#rev_total_revenue_collected').val(rev_total_revenue_collected);
                $('#rev_revenue_collected_by_jalasathi').val(rev_revenue_collected_by_jalasathi);
            });
        }
    }

    $(document).on("submit", "#editCityuserRevenueCollection", function() {
        $.post("editCityuserRevenueCollection", $(this).serialize(), function(data) {
            if (data.res == "success") {
                Swal.fire(
                    'Success',
                    'Revenue Collection Successfully Updated',
                    'success'
                )
                $('#editCityuserRevenueCollection')[0].reset();
                refreshDiv();
            }
        }, 'json')
        return false;
    });

    function refreshDiv() {
        window.location.reload()
    }
</script>