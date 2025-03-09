const onChangeStatus = () => {
    const status = document.getElementById('status');
    const label_take_date = document.getElementById('label_take_date');
    const take_date = document.getElementById('take_date');
    if (status.value == 'selesai') {
        take_date.hidden = false;
        label_take_date.hidden = false;
        take_date.required = true;
    } else {
        take_date.hidden = true;
        label_take_date.hidden = true;
        take_date.required = false;
    }
}