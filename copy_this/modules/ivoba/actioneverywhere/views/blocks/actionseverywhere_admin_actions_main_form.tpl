<tr>
    <td class="edittext">ID:</td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxactions__oxtitle->fldmax_length}]" name="editval[oxactions__oxid]" value="[{$edit->oxactions__oxid->value}]" [{ $readonly }] [{ $disableSharedEdit }]>
    </td>
</tr>
[{$smarty.block.parent}]